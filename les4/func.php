<?php
function my_count($arr){
    $c=0;
    foreach($arr as $v){
        $c++;
    }
    return $c;
}
function my_array_diff($a,$b){
    $r=[];
    foreach($a as $v){
        if(!in_array($v,$b)){
            $r[]=$v;
        }
    }
        return $r;
}
function my_array_intersect($a,$b){
    $r=[];
    foreach($a as $v){
        if(in_array($v,$b)){
            $r[]=$v;
        }
    }
        return $r;
}
function my_array_key_exists($key,$arr){
    foreach($arr as $k=>$v){
        if($k==$key){
            return true;
        }
    }
        return false;
}
function my_array_keys($arr){
    $r=[];
    foreach($arr as $k=>$v){
        $r[]=$k;
    }
    return $r;
}
function my_array_values($arr){
    $r=[];
    foreach($arr as $v){
        $r[]=$v;
    }
    return $r;
}
function my_array_merge($a,$b){
    $r=$a;
    foreach($b as $v){
        $r[]=$v;
    }
    return $r;
}
function my_array_rand($arr){
    $keys=array_keys($arr);
    return $keys[rand(0,count($keys)-1)];
}
function my_array_reverse($arr){
    $r=[];
    for($i=count($arr)-1;$i>=0;$i--){
        $r[]=$arr[$i];
    }
        return $r;
}
function my_array_combine($k,$v){
    $r=[];
    for($i=0;$i<count($k);$i++){
        $r[$k[$i]]=$v[$i];
    }
        return $r;
}
function my_array_search($val,$arr){
    foreach($arr as $k=>$v){
        if($v==$val){
            return $k;
        }
    }
        return false;
}
function my_array_shift($arr){
    unset($arr[0]);
    return $arr;
}
function my_array_unique($arr){
    $r=[];
    foreach($arr as $v){
        if(!in_array($v,$r)){
            $r[]=$v;
        }
    }
        return $r;
}
function my_array_unshift($arr,$val){
    $r=[$val];
    foreach($arr as $v){
        $r[]=$v;
    }
    return $r;
}
function my_array_flip($arr){
    $r=[];
    foreach($arr as $k=>$v){
        $r[$v]=$k;
    }
        return $r;
}
function my_array_pop($arr){
    unset($arr[count($arr)-1]);
    return $arr;
}
function my_array_push($arr,$val){
    $arr[]=$val;
    return $arr;
}
function my_in_array($val,$arr){
    foreach($arr as $v){
        if($v==$val){
            return true;
        }
    }
        return false;
}