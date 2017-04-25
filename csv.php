<?php
/* Script name: Convert
 * Description: Reads in a CSV file and outputs a
 * tab-delimited file. The CSV file must have a
 * .CSV extension. */
$myfile = "testing";
function convert($filename)
{
    if(@$fh_in = fopen("{$filename}.csv","r"))
    {
        $fh_out = fopen("{$filename}.csv","a");
        while(!feof($fh_in))
        {
            $line = fgetcsv($fh_in,1024);
            if($line[0] == "")
            {
                fwrite($fh_out,"\n");
            } else {
                fwrite($fh_out, implode($line,"\t")."\n");
            }
        }
        fclose($fh_in);
        fclose($fh_out);
    } else
        {
        echo "File doesn't exist\n";
        return false;
        }
        echo "Conversion completed!\n";
    return true;
}
convert($myfile);
?>



