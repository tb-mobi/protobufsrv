<?php
$basedir=dirname(dirname(__FILE__));
function get_class_map($dir,$level=0){
    $classmap=[];
    if(!is_dir($dir))return $classmap;
    $bdir=$dir;
    $ns=basename($dir);
    for($i=0;$i<$level;++$i){
        $bdir=dirname($bdir);
        $ns=basename($bdir)."\\".$ns;
    }
    $mobiDir=opendir($dir);
    while(($file=readdir($mobiDir))!==false){
        if(!preg_match('/^\.+/',$file)){
            //echo $dir.'/'.$file.' => '.filetype($dir.'/'.$file)."\n";
            if(filetype($dir.'/'.$file)==='file'){
                $classmap[$ns."\\".preg_replace('/(\S+)\..+/','\1',$file)]=$dir.'/'.$file;
            }
            else if(filetype($dir.'/'.$file)==='dir'){
                $classmap=array_merge($classmap,get_class_map($dir.'/'.$file,$level+1));
            }
        }
    }
    print_r($classmap);
    return $classmap;
}
function mobiplas_autoload($class,$ext="php"){
    $classmap=include("autoload.php");
    if(isset($classmap[$class]))require($classmap[$class]);
}
print_r(spl_autoload_functions());
if(!isset(spl_autoload_functions()['mobiplas_autoload']))spl_autoload_register('mobiplas_autoload',true,true);
?>
