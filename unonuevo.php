<?php 

echo "Andrés es una huevinha!";
echo NumeroPrimo(15)

function NumeroPrimo($Num)
{
  $con=0
  $conmul=0
  while($con<=$num)
  {
    if ($num % $con == 0)
    {
      $conmul+=1
    }
    $con+=1
  }
  if($conmul>2)
  {
    return $Num + " no es una numero primo"
  }
  else
  {
    return $Num + " es una numero primo"
  }
}
?>
