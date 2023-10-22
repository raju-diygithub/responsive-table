<!DOCTYPE html><!-- Declare the document type -->
<html lang="en"><!-- Declare the language of the document -->
<head><!-- Start the head section -->
    <meta charset="utf-8"> <!-- Set character encoding to UTF-8 -->
    <title>Responsive Table</title> <!-- Set the webpage title -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Define viewport settings for responsiveness -->
    <link rel="stylesheet" href="style.css"> <!-- Link to an external stylesheet -->
</head><!-- End the head section -->
<body><!-- Start the body section -->
    <h4>Responsive Table</h4> <!-- Display a heading -->
    <p>Resize the browser window to see the effect.</p> <!-- Display a paragraph -->
    <table class="responsive-table"> <!-- Create a table with a class attribute -->
        <!-- Table Header Section -->
        <thead><!-- Add a thead element with a style attribute -->
            <tr> <!-- Start a table row for headers -->
                <?php $td_count=10; 
                //PHP: Declare and assign the value 10 to $td_count -->
                // Creation of header columns
                for($t=1;$t<=$td_count;$t++){ ?>
                <!-- PHP: Start a for loop to create header columns -->
                <th>Header <?=$t?></th>
                <!-- Generate table header cells with dynamic header labels -->
                <?php } ?>
                <?php // End creation of header columns ?>
            </tr> <!-- End the table header row -->
        </thead><!-- End the table header section -->

        <!-- Table Body Section -->
        <tbody><!-- Add a tbody element -->
            <?php // Creation of rows ?>
            <?php for($i=1;$i<=$td_count;$i++){ ?>
            <!-- PHP: Start a for loop to create table rows -->
            <tr style="border-top:1pt solid #aaa;">
                <?php $x=0; 
                // PHP: Initialize a variable $x to 0 -->
                // Creation of columns 
                for($x=1;$x<=$td_count;$x++){ ?>
                <!-- PHP: Start a for loop to create table columns -->
                <td data-label="Header <?=$x?>&nbsp;&nbsp;&nbsp;:">Data_<?=$i?>-<?=$x;?></td>
                <!-- Generate table data cells with dynamic labels and data -->
                <?php } 
                // End creation of columns 
                ?>
            </tr> <!-- End the table row -->
            <?php } ?>
            <?php // End creation of rows ?>
        </tbody> <!-- End the table body section -->
    </table> <!-- End the table -->
</body><!-- End the body section -->
</html><!-- End the HTML document -->
