<!DOCTYPE html>
<html>
    <head>
        <title>Calendar Widget</title>
        <link rel="stylesheet" href="calendar.css"/>
    </head>
    <body>
        <!--This wraps the entire calendar together-->
        <div id='calendar'>
            
            <!--This section holds the month, the month switchers and the bindings-->
            <div class='header'>
                <span class='left-button' id="prev">&lang</span>
                <span class='left-hook'></span>
                <span class='month-year' id='label'> </span>
                <span class='right-button' id='next'></span>
            </div>
            
            <!--Table for the names of the days-->
            <table id='days'>
                <tr>
                    <td></td>
                </tr>
            </table>
            
            <!-- This is the calendar grid-->
            <div id='calendar-frame'>
                
                
            </div>
        </div>
        
    </body>
</html>