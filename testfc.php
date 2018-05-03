<?php error_reporting(E_ALL || ~E_NOTICE); ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <title>test</title>
</head>
<body>
<?php
require_once 'phpanalysis.class.php';
$pa=new PhpAnalysis();
$pa->SetSource("PHPAnalysis分词系统是基于字符串匹配的分词方法进行分词的，这种方法又叫做机械分词方法，它是按照一定的策略将待分析的汉字串与 一个“充分大的”机器词典中的词条进行配，若在词典中找到某个字符串，则匹配成功（识别出一个词）。按照扫描方向的不同，串匹配分词方法可以分为正向匹配 和逆向匹配；按照不同长度优先匹配的情况，可以分为最大（最长）匹配和最小（最短）匹配；按照是否与词性标注过程相结合，又可以分为单纯分词方法和分词与 标注相结合的一体化方法。常用的几种机械分词方法如下： ");
$pa->resultType=2;
$pa->differMax=true;
$pa->StartAnalysis();
$arr=$pa->GetFinallyIndex();
echo "<pre>";
print_r($arr);
echo "</pre>";

?>
</body>
</html>