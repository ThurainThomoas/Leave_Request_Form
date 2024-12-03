<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave_Request_Form</title>
    <style>
        body {font-family: Arial, Helvetica, sans-serif; margin: 0px 50px 0px 20px;}
        label {font-weight: bold ;}
        input, textarea {padding: 10px; margin: 5px; width: 100%;}
        button {color: white; background-color: green; cursor: pointer; border: none; padding: 10px 20px;}
        button:hover {background-color: gray ;}

    </style>
</head>
<body>
    <h3>Leave Request Form</h3>
    <form action="" method="">
        <label for="employee_name">Employee Name</label>
            <input type="text" id="employee_name" name="employee_name">
            
        <label for="leave_types">Leave Types</label>
            <input type="text" id="leave_types" name="leave_types">

        <label for="start_date">Start Date</label>
            <input type="date" id="start_date" name="start_date">

        <label for="end_date">End Date</label>
            <input type="date" id="end_date" name="end_date">

        <label for="reason">Employee Name</label>
            <textarea type="text" id="reason" name="reason" row=4></textarea>

            <button type="submit">Submit</button>
    </form>
    
</body>
</html>