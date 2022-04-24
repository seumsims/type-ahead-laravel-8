<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Type Ahead Auto Complete Search</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">    
            <br />
            <h1 class="text-center text-primary">Typeahead JS Live Autocomplete Search in Laravel 8</h1>
            <br />
            <input type="text" name="user_name" id="user_name" class="form-control-lg" placeholder="Enter User Name..." />
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" ></script>

    <script>

        var path = "{{ url('typeahead_autocomplete/action') }}";
        
        $('#user_name').typeahead({
        
            source: function(query, process){
        
                return $.get(path, {query:query}, function(data){
        
                    return process(data);
        
                });
        
            }
        
        });
        
        </script>
</body>
</html>