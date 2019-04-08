<?php
function create($cols,$rows){
	$string = '';
	for ($i = 1;$i <= $cols;$i++)
            {
                $string .= "<th bgcolor=LightSalmon><b>" . $i . "</b></th>";
            }
            $string .= "</tr>";
            for ($i = 1;$i <= $rows;$i++)
            {
                $string .= "<tr> <th bgcolor=LightSalmon>" . $i . "</th>";
                for ($j = 1;$j <= $cols;$j++)
                {
                    if ($i == $j)
                    {
                        $string .= "<th bgcolor=NavajoWhite>" . $i * $j . "</font></th>";
                    }
                    else
                    { 
                        $string .= "<th>" . $i * $j . "</font></th>";
                    }
                }
                $string .= "</tr>";
            }
            echo $string;
}
