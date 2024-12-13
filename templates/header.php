<?php
if (!function_exists('renderHeader')) {
    function renderHeader($pageTitle = 'PHP Assignment 3') {
        echo "<!DOCTYPE html>\n";
        echo "<html lang=\"en\">\n";
        echo "<head>\n";
        echo "    <meta charset=\"UTF-8\">\n";
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n";
        echo "    <link rel=\"stylesheet\" href=\"css/style.css\">\n";
        echo "    <title>{$pageTitle}</title>\n";
        echo "</head>\n";
        echo "<body>\n";
        echo "    <header>\n";
        echo "        <nav>\n";
        echo "            <ul>\n";
        echo "                <li><a href=\"index.php\">Home</a></li>\n";
        echo "                <li><a href=\"member.php\">Members</a></li>\n";
        echo "                <li><a href=\"register.php\">Register</a></li>\n";
        echo "                <li><a href=\"contact.php\">Contact</a></li>\n";
        echo "                <li><a href=\"logout.php\">Logout</a></li>\n";
        echo "            </ul>\n";
        echo "        </nav>\n";
        echo "    </header>\n";
    }
}
?>
