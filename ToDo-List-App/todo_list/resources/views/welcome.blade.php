<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>To-do List</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Styles -->
        
    </head>
    <body class="antialiased">
        
        <div class="container1 relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
           
        <div>
            <h1 class="header">To-do List</h1 >
            <table class="table">
                
                @foreach ($listItems as $listItem) 
                    <tr class="tableRow"><td>Task: {{$listItem->name}}</td>
                    <div style="display: flex">

                    <form method="post" action="{{route( 'edit', $listItem->id) }}" accept-charset="UTF-8">
                        {{ csrf_field() }}
                        
                        <td><button class="button editbutton" type="submit">Edit</button></td>
            
                     </form>

                    
                        @if( $listItem->completed == 0)
                            <form method="post" action="{{route( 'markComplete', $listItem->id) }}" accept-charset="UTF-8">
                        {{ csrf_field() }}
                            <td><button class="button combutton" type="submit">Mark Completed</button></td>
                            </form>
                        
                        @else 
                            <form method="post" action="{{route( 'markComplete', $listItem->id) }}" accept-charset="UTF-8">
                        {{ csrf_field() }}
                            <td><button class="button combutton" type="submit">Mark Incomplete</button></td>
                            </form>
                        
                            </form>
                        @endif
                     <form method="post" action="{{route( 'removeItem', $listItem->id) }}" accept-charset="UTF-8">
                       {{ csrf_field() }}
                        {{ method_field('DELETE')}}
                        <td><button class="button delbutton" type="submit">Delete</button></td>
            
                     </form>
                     
                     
                    </div> 
                </tr>
                @endforeach
                
                <form method="post" action="{{route( 'saveItem') }}" accept-charset="UTF-8">
                {{ csrf_field() }}
                
                <tr class="tableRow"><td class="newItemCentre"><label for="listItem">New Task</label></br></td></tr>
                <tr class="tableRow"><td class="newItemCentre"><input type="text" name="listItem"></br></td></tr>
                <tr class="tableRow"><td class="newItemCentre"><button class="button savebutton">Save Item</button></td></tr>
                
            </form>
        
        </table>
        </div>
            </div>
    </body>
</html>
