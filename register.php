<html>
    <head>
        <title>SEATWORK</title>
    </head>
    <body>
        <h1> ADD STUDENT </h1>
        <form action = "action_page.php" method="POST">
            <table border="1" cellspacing="5" width="25%">
                <tr>
                    <th>Question</th>
                    <th>Answer</th>
                </tr>
                <tr>
                    <td>Name</td>
                        <td> <input type = "text" name = "FullName" placeholder="Enter the FullName"></td>
                </tr>    
                <tr>
                    <td>Gender</td>
                    <td> 
                        <input type="radio" name="Gender" value="male" >
                        <label for="male">Male</label>
                        <input type = "radio" name="Gender" value="female">
                        <label for="female">Female</label>
                    </td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td>
                        <select name="Country">
                            <option value="PH">-SELECT YOUR COUNTRY-</option>
                            <option value="PH">Philippines</option>
                            <option value="AUS">Australia</option>
                            <option value="US">United States</option>
                        <select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="right"> 
                        <input style = "padding:1@px; color: #FFF; background-color: blue"
                        type= "Submit" name = "save" value="Save Record" /> </td>
                </tr>
            </table>
        </form>
    </body>
</html>