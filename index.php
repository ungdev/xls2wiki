<?phpphp header("Content-type: text/html; charset=UTF-8"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="text/javascript" charset="utf-8">
        function selText()
        {
            document.getElementById("txt1").select()
        }
    </script>

    <style type="text/css">
        body {
            font: .8em "Trebuchet MS", Verdana, Arial, Sans-Serif;
            text-align: center;
            color: #333;
            background-color: #fff;
            margin-top: 0em;
        }

        h1 {
            font-size: 2em;
            padding: 0;
            margin: 0;
        }

        h5 {
            font-size: 1em;
            color: #09c;
            font-weight: bold;
        }

        form {
            background-color: #eee;
            border: 1px solid #ccc;
            margin-left: auto;
            margin-right: auto;
            padding: 1em;
        }


        a {
            color: #09c;
            text-decoration: none;
            font-weight: bold;
        }


    </style>

</head>
<?php
$s = $_POST['s'];
$fromto = $_POST['fromto'];

if ($fromto=="E2W"){
    $s = str_replace("\r\n", " |\n| ", $s);
    $s = str_replace("\t", " | ", $s);
    $s = str_replace("|  |", "| . |", $s);
    $s = str_replace("|  |", "| . |", $s);
    $s = str_replace("|  |", "| . |", $s);
    $s = str_replace("|  |", "| . |", $s);
    $s = "| ".$s;
    $s = substr($s,0,-2); //get rid of last newline conversion
}else{
    $s = str_replace("^", "|", $s);
    $s = str_replace("|\r\n|", "\r\n", $s);
    $s = str_replace("\r\n ", "\r\n", $s);
    $s = str_replace(" |", "|", $s);
    $s = str_replace("| ", "|", $s);
    $s = str_replace("|", "\t", $s);
    $s = substr($s,1); // get rid of first | without /r/n

}

?>
<body onload="selText()">
<center>
    <h5>WIKI2EXCEL converter</h5>
    Copy and paste your Excel or Wiki table below and press [Convert!]<br/>
    Скопируйте и вставьте таблицу из  Excel или Wiki и нажмите [Convert!] (конвертировать)
    <form method=POST action="">
        <input type="radio" name="fromto" value="E2W" checked>Excel Â» Wiki<br>
        <input type="radio" name="fromto" value="W2E">Wiki Â» Excel<br>
        <INPUT TYPE=SUBMIT VALUE="Convert!"><br/>
        <textarea id="txt1" name="s" wrap="off" cols=80 rows=50 style="width:800; height:450"><?php echo $s; ?></textarea>
    </form>
    <span style="font-size:80%">
<strong>Version 0.1 : </strong>
<ul>
<li>Headers from wiki2excel will not be converted properly</li>
<li>Links with alternative text (like <i>[[link|alt.text]] ) will not convert properly</li>
</ul>
</span>
</center>
</body></html><?phpphp header("Content-type: text/html; charset=UTF-8"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="text/javascript" charset="utf-8">
        function selText()
        {
            document.getElementById("txt1").select()
        }
    </script>

    <style type="text/css">
        body {
            font: .8em "Trebuchet MS", Verdana, Arial, Sans-Serif;
            text-align: center;
            color: #333;
            background-color: #fff;
            margin-top: 0em;
        }

        h1 {
            font-size: 2em;
            padding: 0;
            margin: 0;
        }

        h5 {
            font-size: 1em;
            color: #09c;
            font-weight: bold;
        }

        form {
            background-color: #eee;
            border: 1px solid #ccc;
            margin-left: auto;
            margin-right: auto;
            padding: 1em;
        }


        a {
            color: #09c;
            text-decoration: none;
            font-weight: bold;
        }


    </style>

</head>
<?php
$s = $_POST['s'];
$fromto = $_POST['fromto'];

if ($fromto=="E2W"){
    $s = str_replace("\r\n", " |\n| ", $s);
    $s = str_replace("\t", " | ", $s);
    $s = str_replace("|  |", "| . |", $s);
    $s = str_replace("|  |", "| . |", $s);
    $s = str_replace("|  |", "| . |", $s);
    $s = str_replace("|  |", "| . |", $s);
    $s = "| ".$s;
    $s = substr($s,0,-2); //get rid of last newline conversion
}else{
    $s = str_replace("^", "|", $s);
    $s = str_replace("|\r\n|", "\r\n", $s);
    $s = str_replace("\r\n ", "\r\n", $s);
    $s = str_replace(" |", "|", $s);
    $s = str_replace("| ", "|", $s);
    $s = str_replace("|", "\t", $s);
    $s = substr($s,1); // get rid of first | without /r/n

}

?>
<body onload="selText()">
<center>
    <h5>WIKI2EXCEL converter</h5>
    Copy and paste your Excel or Wiki table below and press [Convert!]<br/>
    Скопируйте и вставьте таблицу из  Excel или Wiki и нажмите [Convert!] (конвертировать)
    <form method=POST action="">
        <input type="radio" name="fromto" value="E2W" checked>Excel Â» Wiki<br>
        <input type="radio" name="fromto" value="W2E">Wiki Â» Excel<br>
        <INPUT TYPE=SUBMIT VALUE="Convert!"><br/>
        <textarea id="txt1" name="s" wrap="off" cols=80 rows=50 style="width:800; height:450"><?php echo $s; ?></textarea>
    </form>
    <span style="font-size:80%">
<strong>Version 0.1 : </strong>
<ul>
<li>Headers from wiki2excel will not be converted properly</li>
<li>Links with alternative text (like <i>[[link|alt.text]] ) will not convert properly</li>
</ul>
</span>
</center>
</body></html>K