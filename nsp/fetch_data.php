<?php
    // Database connection configuration
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "nsp";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve data from the "fetch" table
    $sql = "SELECT name, s_no, stock_name,date_bought,ammount,price,current_price FROM fetch";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
         <table id='geeks' input type='text' id='searchInput' placeholder='Search'>
         <tr><th>s_no</th><th>stock_name</th><th>date_bought</th></tr><th>ammount</th><th>price</th><th>current_price</th>

         while ($row = $result->fetch_assoc()) {
            <tr>
            <td>" . $row["s_no"] . "</td>";
            <td>" . $row["stock_name"] . "</td>
            <td>" . $row["date_bought"] . "</td>
			<td>" . $row["ammount"] . "</td>
			<td>" . $row["price"] . "</td>
			<td>" . $row["current_price"] . "</td>
            </tr>
        }

        </table>;
    } else {
        echo "No records found.";
    }

    // Close database connection
    $conn->close();
?>