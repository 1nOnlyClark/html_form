<html>
    <head>
        <title>Document</title>
    </head>
        <body>
            <form action="action_page.php" method="POST  ">
                <table border = "10" cellspacing = "20  ">
                    <tr>
                        <td> Name: </td>
                        <td> <input type="text" name="name" value = "Clark"> </td>
                    </tr>
                    <tr>
                        <td> Gender: </td>
                        <td>
                            <input type="radio" name="gender" value="male" checked> Male
                            <input type="radio" name="gender" value="female"> Female
                        </td>
                    </tr>
                    <tr>
                        <td> Country: </td>
                        <td>
                            <select name="country">
                                <option value="select country">SELECT COUNTRY</option>
                                <option value="PH" >Philippines</option>
                                <option value="AUS"selected>Australia</option>
                                <option value="US">United States</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right">
                            <input type="submit" value="Save" name = "save button">
                        </td>
                    </tr>
                </table>
            </form>    
        </body>
</html>