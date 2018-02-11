<?php

    $base64_string = $_POST['base64_string'];
    $savename = uniqid().'.jpeg';//localResizeIMG压缩后的图片都是jpeg格式
    $savepath = '../upload/'.$savename; 
    $image = base64_to_img( $base64_string, $savepath );
    $url = 'http://221.10.2.222:5680/api/wx/Files?filetypekey=W3siZGVzYyI6ICIiLCJtb2R1bGUiOjEwMDMsInJlbGF0ZWlkIjowLCJyZW1hcmsiOiAiIiwic2l6ZSI6ICIiLCAidGltZSI6ICIifV0=';
    $data = array(
            'filepath' => new \CURLFile(realpath($image))
        );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, 0);
    $a = curl_exec($ch);
    $bb = json_decode($a, true);
    curl_close($ch);    
    $imagelist= $bb['datalist'][0];
    $image = base64_to_img( $base64_string, $imagelist );
    if($image){
        echo '{"status":1,"content":"上传成功","url":"'.$image.'"}';
    }else{
        echo '{"status":0,"content":"上传失败"}';
    } 
    function base64_to_img( $base64_string, $output_file ) {
        $ifp = fopen( $output_file, "wb" ); 
        fwrite( $ifp, base64_decode( $base64_string) ); 
        fclose( $ifp ); 
        return( $output_file ); 
    } 
