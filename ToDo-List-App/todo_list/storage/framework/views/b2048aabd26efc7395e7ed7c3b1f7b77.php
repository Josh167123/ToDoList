<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
        <title>Edit Task</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Styles -->
        
    </head>
    <body class="antialiased">
        
        <div class="container1 relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
           
            <table>
                <h1>Edit Task</h1>
                    <tr>

                    <input type="text" name="task" value="<?php echo e($listItem->name); ?>">       
                    
                    <form method="post" action="<?php echo e(route( 'update', $listItem->name)); ?>" accept-charset="UTF-8">
                        <?php echo e(csrf_field()); ?>

                        <?php echo e(method_field('PUT')); ?>


                        <td><button class="button editbutton" type="submit">Save</button></td>
            
                     </form>
                </tr>
            </table>
        
            </div>
    </body>
</html>
<?php /**PATH C:\Users\joshu\Documents\ToDo-List-App\todo_list\resources\views/edit.blade.php ENDPATH**/ ?>