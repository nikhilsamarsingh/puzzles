<?PHP

$inpt = $_POST['inpt'];

$radio=$_POST['fnctn'];
if($radio=="addone")
	addone($inpt);
if($radio=="subone")
	subone($inpt);
if($radio=="addateven")
	addateven($inpt);
if($radio=="subateven")
	subateven($inpt);
if($radio=="addatodd")
	addatodd($inpt);
if($radio=="subatodd")
	subatodd($inpt);
elseif($radio=="addseries")
	addseries($inpt);
elseif($radio=="subseries")
	subseries($inpt);
elseif($radio=="addsqr")
	addsqr($inpt);
elseif($radio=="subsqr")
	subsqr($inpt);
elseif($radio=="addodd")
	addodd($inpt);
elseif($radio=="subodd")
	subodd($inpt);
elseif($radio=="addeven")
	addeven($inpt);
elseif($radio=="subeven")
	subeven($inpt);




function addone($abc)
{
	$arr=str_split($abc);
	for ($i=0; $i <strlen($abc); $i++) { 
		 $ch=ord($arr[$i])+1;
        if( $ch>122)
        	$ch=$ch-26;
        $arr[$i]=chr($ch);
	}
    
	echo join("",$arr);
}
function subone($abc)
{
	$arr=str_split($abc);
	for ($i=0; $i <strlen($abc); $i++) { 
		 $ch=ord($arr[$i])-1;
        if( $ch<97)
        	$ch=$ch+26;
        $arr[$i]=chr($ch);
	}

	echo join("",$arr);
}
function addateven($abc)
{
	$arr=str_split($abc);
	for ($i=0; $i <strlen($abc); $i++) { 
		if($i%2==1)
		 $ch=ord($arr[$i])+1;
		else
		 $ch=ord($arr[$i]);	
        if( $ch>122)
        	$ch=$ch-26;
        $arr[$i]=chr($ch);
	}
    
	echo join("",$arr);
}
function subateven($abc)
{
	$arr=str_split($abc);
	for ($i=0; $i <strlen($abc); $i++) { 
		if($i%2==1)
		 $ch=ord($arr[$i])-1;
		else
		 $ch=ord($arr[$i]);	
        if( $ch<97)
        	$ch=$ch+26;
        $arr[$i]=chr($ch);
	}
    
	echo join("",$arr);
}
function addatodd($abc)
{
	$arr=str_split($abc);
	for ($i=0; $i <strlen($abc); $i++) { 
		if($i%2==0)
		 $ch=ord($arr[$i])+1;
		else
		 $ch=ord($arr[$i]);	
        if( $ch>122)
        	$ch=$ch-26;
        $arr[$i]=chr($ch);
	}
    
	echo join("",$arr);
}
function subatodd($abc)
{
	$arr=str_split($abc);
	for ($i=0; $i <strlen($abc); $i++) { 
		if($i%2==0)
		 $ch=ord($arr[$i])-1;
		else
		 $ch=ord($arr[$i]);	
        if( $ch<97)
        	$ch=$ch+26;
        $arr[$i]=chr($ch);
	}
    
	echo join("",$arr);
}

function addseries($abc)
{
	$arr=str_split($abc);
	for ($i=0; $i <strlen($abc); $i++) { 
		 $ch=ord($arr[$i])+$i;
        if( $ch>122)
        	while($ch>122)
        	$ch=$ch-26;
        $arr[$i]=chr($ch);
	}
    
	echo join("",$arr);
}
function subseries($abc)
{
	$arr=str_split($abc);
	for ($i=0; $i <strlen($abc); $i++) { 
		 $ch=ord($arr[$i])-$i;
        if( $ch<97)
        	while($ch<97)
        	$ch=$ch+26;
        $arr[$i]=chr($ch);
	}
    
	echo join("",$arr);
}

function addsqr($abc)
{
	$arr=str_split($abc);
	for ($i=0; $i <strlen($abc); $i++) { 
		 $ch=ord($arr[$i])+($i*$i);
        if( $ch>122)
        	while( $ch>122)
        	$ch=$ch-26;
        $arr[$i]=chr($ch);
	}
    
	echo join("",$arr);
}
function subsqr($abc)
{
	$arr=str_split($abc);
	for ($i=0; $i <strlen($abc); $i++) { 
		 $ch=ord($arr[$i])-($i*$i);
        if( $ch<97)
        	while( $ch<97)
        	$ch=$ch+26;
        $arr[$i]=chr($ch);
	}
    
	echo join("",$arr);
}
function addodd($abc)
{
	$arr=str_split($abc);
	for ($i=0; $i <strlen($abc); $i++) { 
		 $ch=ord($arr[$i])+(2*$i+1);
        if( $ch>122)
        	while( $ch>122)
        	$ch=$ch-26;
        $arr[$i]=chr($ch);
	}
    
	echo join("",$arr);
}
function subodd($abc)
{
	$arr=str_split($abc);
	for ($i=0; $i <strlen($abc); $i++) { 
		 $ch=ord($arr[$i])-(2*$i+1);
        if( $ch<97)
        	while( $ch<97)
        	$ch=$ch+26;
        $arr[$i]=chr($ch);
	}
    
	echo join("",$arr);
}
function addeven($abc)
{
	$arr=str_split($abc);
	for ($i=0; $i <strlen($abc); $i++) { 
		 $ch=ord($arr[$i])+(2*$i);
        if( $ch>122)
        	while( $ch>122)
        	$ch=$ch-26;
        $arr[$i]=chr($ch);
	}
    
	echo join("",$arr);
}

function subeven($abc)
{
	$arr=str_split($abc);
	for ($i=0; $i <strlen($abc); $i++) { 
		 $ch=ord($arr[$i])-(2*$i);
        if( $ch<97)
        	while( $ch<97)
        	$ch=$ch+26;
        $arr[$i]=chr($ch);
	}
    
	echo join("",$arr);
}

?>