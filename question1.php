<?php
/**
 * QUESTION 1
 * Step 1
 * Create a simple HTML table that has 3 rows and 2 columns.
 * Step 2
 * Into the first column, enter labels for Firstname, Surname and ID Number and in the second column
 * put in input fields where a user can enter their Firstname, Surname and ID Number.
 *
 * Step 3
 * Create a form that will submit this information to the same page
 *
 * Step 4
 * On the same page, take the submitted information and write a SQL query
 * that will insert the posted information into a table called tbl_Person, that has columns
 * col_firstname, col_surname, col_idnumber.
 *
 * Note: It's optional whether you want to write code that connects to a database and code
 * that inserts into the database. We just want to see the SQL query, that uses the posted
 * variables to insert into table person
 */
?>
<!-- SUPPLY YOUR ANSWER BELOW THIS COMMENT -->

<form action="question1.php" method="post">
    <table style="border: 1px solid black">
        <thead>
        <tr>
            <td>
                Firstname
            </td>
            <td>
                Surname
            </td>
            <td>
                ID Number
            </td>
        </tr>

        </thead>
        <tbody>
        <tr>
            <td>
                <input type="text" name="firstname"/>
            </td>
            <td>kk
                <input type="text" name="surname"/>

            </td>
            <td>
                <input type="text" name="idnumber"/
            </td>
        </tr>
        </tbody>
    </table>

    <input type="submit" name="submit" value="Submit"/>
</form>
<?php
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    echo "<pre>INSERT INTO tbl_Person (col_firstname, col_surname, col_idnumber) VALUES ('" . $_POST['firstname'] . "', '" . $_POST['surname'] . "', '" . $_POST['surname'] . "');</pre>";

}


?>
