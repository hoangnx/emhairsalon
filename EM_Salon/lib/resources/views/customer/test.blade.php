<!DOCTYPE html>
<html>
<head>
	<title></title>
    <style>
        body {
        font-family: Helvetica, Arial, sans-serif;
        }

        table {
        width: 90%;
        margin:100px auto;
        table-layout:fixed;
        border-collapse: collapse;
        }

        td {
        padding:1em 0 0 0;
        vertical-align:bottom;
        background-image:radial-gradient(black 1px, white 0px);
        background-size: 8px 8px;
        background-repeat:repeat-x;
        background-position: left bottom;
        }
        
        td span{
        background-color:#fff;
        }
        
        td:first-child {
        text-align: left;
        font-weight: 700;
        }
        
        td:first-child span{
        padding-right:.25em;
        }

        td:last-child {
        text-align:right;
        width:3em;
        }
        
        td:last-child span{
        padding-left:.25em;
        }
    
    </style>
</head>
<body>
	
	
    <table>
        <tr>
            <td><span>Just Eggs</span></td>
            <td><span>$5.50</span></td>
        </tr>
        <tr>
            <td><span>with American, Cheddar or Swiss</span></td>
            <td><span>$6</span></td>
        </tr>
        <tr>
            <td><span>with Bacon, Turkey Bacon, or Ham</span></td>
            <td><span>$7</span></td>
        </tr>
        <tr>
            <td><span>with Meat & Cheese</span></td>
            <td><span>$8</span></td>
        </tr>
    </table>
    
</body>
</html>