<?php
/**
 * API: Book Appointment
 * Shri Ram Hospital - Aonla, Bareilly
 */

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

$dataDir = __DIR__ . '/../data';
if (!is_dir($dataDir)) {
    mkdir($dataDir, 0777, true);
}
$dataFile = $dataDir . '/appointments.json';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Return appointments list (for reception/admin)
    if (file_exists($dataFile)) {
        $content = file_get_contents($dataFile);
        echo $content ?: json_encode([]);
    } else {
        echo json_encode([]);
    }
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $rawInput = file_get_contents('php://input');
    $data = json_decode($rawInput, true);

    if (!$data || empty($data['name']) || empty($data['phone'])) {
        http_response_code(400);
        echo json_encode([
            'success' => false,
            'message' => 'Invalid data. Name and Phone are required.'
        ]);
        exit;
    }

    $existing = [];
    if (file_exists($dataFile)) {
        $fileContent = file_get_contents($dataFile);
        $decoded = json_decode($fileContent, true);
        if (is_array($decoded)) {
            $existing = $decoded;
        }
    }

    // Add server timestamp & sanitize
    $data['id'] = $data['tokenId'] ?? ('SRH-' . time());
    $data['serverReceivedAt'] = date('Y-m-d H:i:s');
    $data['status'] = $data['status'] ?? 'Confirmed';

    array_unshift($existing, $data);

    // Save with pretty print
    file_put_contents($dataFile, json_encode($existing, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

    echo json_encode([
        'success' => true,
        'message' => 'Appointment recorded successfully.',
        'tokenId' => $data['id']
    ]);
    exit;
}

http_response_code(405);
echo json_encode(['error' => 'Method Not Allowed']);
