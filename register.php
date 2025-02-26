<html>
    <head>
        <title>SEATWORK</title>
    </head>
    <body>
        <form action = "action.php" method="GET">
            <table>
                <tr>
                    <th>Question</th>
                    <th>Answer</th>
                </tr>
                <tr>
                    <td>Name</td>
                    <td> <input type = "text" Name = "FullName"></td>
                </tr>    
                <tr>
                    <td>Gender</td>
                    <td> <input type = "Radio" Value = "Male"></td>
                    <td> <input type = "Radio" Value = "Female"></td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td><select>
                            <option>PH</option>
                            <option>AUS</option>
                            <option>US</option>
                        <select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type = "Submit" Value = "Save"></td>
                </tr>
            </table>
        </form>
    </body>>
</html>