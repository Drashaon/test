<?php
function LogSqlError($db)
{
    $filename = "sql_logs_" . date('Y_m_d') . ".log";

    $line =  '['.date('d/m/Y - H:i:s') . "] -- Erreur SQL : " . mysqli_error($db);

    LogToFile($filename, $line);

    mysqli_close($db);

    exit();
}

function LogFile($line)
{
    $filename = "logs_" . date('Y_m_d') . ".log";

    LogToFile($filename, $line);
}

function ErrorFile($line)
{
    $filename = "error_" . date('Y_m_d') . ".log";

    LogToFile($filename, $line);
}

function LogToFile($filename, $line)
{
    global $cst_path;

    $line = '['.date('d/m/Y - H:i:s') . "] -- " . $line . "\n";

    file_put_contents("$cst_path/$filename", $line, FILE_APPEND);
}

$log_content = "";

if(!empty($USER))
    $log_content .= json_encode($USER) . " ";

$log_content .= "[".$_SERVER["REMOTE_ADDR"]."] access " . ($_SERVER["SCRIPT_NAME"]) . ' ';

if(sizeof($_GET) > 0)
{
    $get = array();
    foreach($_GET as $k => $v)
    {
        $get[($k)] = ($v);
    }
    $get = json_encode($get);
    $log_content .= '(GET: '. $get . ') ';
}

if(sizeof($_POST) > 0)
{
    $__password = isset($_POST['password']) ? $_POST['password'] : '';

    if(!empty($_POST['mdp']))
        $_POST['mdp'] = "**************";
    if(!empty($_POST['password']))
        $_POST['password'] = "**************";

    $post = array();
    foreach($_POST as $k => $v)
    {
        $post[($k)] = ($v);
    }
    $post = json_encode($post);
    $log_content .= '(POST: ' . $post . ') ';
}

LogFile($log_content);
