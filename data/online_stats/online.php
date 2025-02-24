<?php
// online.php 增强版
$timeout = 300;
$logFile = __DIR__ . '/.online_log';

try {
    // 检测必要参数是否存在
    $isWebRequest = isset($_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT']);
    
    // 读取现有数据
    $activeUsers = file_exists($logFile) 
        ? json_decode(file_get_contents($logFile), true) 
        : [];
    
    // 清理过期记录
    $currentTime = time();
    foreach($activeUsers as $key => $timestamp) {
        if($currentTime - $timestamp > $timeout) {
            unset($activeUsers[$key]);
        }
    }
    
    // 仅在Web请求时更新记录
    if($isWebRequest) {
        $Hash = hash('sha256', $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']);
        $activeUsers[$Hash] = $currentTime;
    }
    
    // 保存数据（原子操作）
    file_put_contents($logFile, json_encode($activeUsers), LOCK_EX);
    
    // 返回在线人数
    echo count($activeUsers);
} catch (Exception $e) {
    error_log("Online Counter Error: " . $e->getMessage());
    echo "0";
}
?>
