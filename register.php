<html>
    <head>
        <title>SEATWORK</title>
    </head>
    <body>
        <form action = "action_page.php" method="GET">
            <table>
                <tr>
                    <th>Question</th>
                    <th>Answer</th>
                </tr>
                <tr>
                    <td>Name</td>
                    <td> <input type = "text" Value = "FullName"></td>
                </tr>    
                <tr>
                    <td>Gender</td>
                    <td> 
                        <input type="radio" id="male" name="value" value="male" >
                        <label for="male">Male</label>
                        <input type = "radio" id="female" name="value" value="female">
                        <label for="female">Female</label>
                    </td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td>
                        <select>
                            <option>PH</option>
                            <option>AUS</option>
                            <option>US</option>
                        <select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"> <input type = "Submit" Value = "Save"> </td>
                </tr>
            </table>
        </form>
    </body>
</html>