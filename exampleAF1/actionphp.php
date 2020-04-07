<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    if (empty($name) || empty($email) || empty($phone)) {
        echo "Các mục ở trên bạn nhập thiếu vui lòng kiểm tra và nhập lại";
    }
    if (filter_var($email,FILTER_VALIDATE_EMAIL)){
        return true;
    } else {
        echo "Emai không đúng !";
    }
    function getDataJson($filename)
    {
        $dataJSON = file_get_contents($filename);
        return json_decode($dataJSON);
    }
    function saveDataJSON($filename, $name, $email, $phone)
    {
        try {
            $contact = ['name' => $name, 'email' => $email, 'phone' => $phone];
            $dataArr = getDataJson($filename);
            array_push($dataArr, $contact);
            $dataJSON = json_encode($dataArr);
            file_put_contents($filename, $dataJSON);
            echo "lưu dữ liệu thành công";
        } catch (Exception $e) {
            echo 'Lỗi', $e->getMessage(), "\n";
        }
    }
    saveDataJSON('users.json',$name,$email,$phone);
}

?>

