<html>
    <head>
        <title>SEATWORK</title>
    </head>
    <body style="background-color:skyblue">
        <h1> ADD STUDENT </h1>
        <form action = "action_page.php" method="GET">
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
                        <input type="radio" id="male" name="value" value="male" >
                        <label for="male">Male</label>
                        <input type = "radio" id="female" name="value" value="female">
                        <label for="female">Female</label>
                    </td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td>
                        <select name="country">
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
                        type= "Submit" name = "save" value="Save" /> </td>
                </tr>
            </table>
        </form>
    </body>
</html>