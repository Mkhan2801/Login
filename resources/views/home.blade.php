<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
      @isset($title)
          {{$title}} | OurApp
   
              
          @else
          OurApp  
      @endisset
      </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body class="bg-gradient-to-t from-teal-950 to-teal-600 text-white flex justify-center items-center min-h-screen p-4
        
        [&_label]:cursor-pointer

        [&_a]:underline
        [&_a]:transition
        [&_a]:duration-300
        hover:[&_a]:text-teal-500
    ">

  <input type="radio" name="panel" id="radio-1" class="sr-only peer/panel-1" checked>
  <input type="radio" name="panel" id="radio-2" class="sr-only peer/panel-2">

  <main class="grid w-full max-w-sm  backdrop-blur-sm 

            peer-checked/panel-1:[&_#panel-1]:translate-x-0
            peer-checked/panel-1:before:[&_#tab-1]:bg-black/60
            peer-checked/panel-1:before:[&_#tab-1]:inset-0
            peer-checked/panel-1:[&_#tab-1]:text-teal-500
            peer-checked/panel-1:[&_#tab-1]:cursor-auto
            peer-checked/panel-1:before:[&_#tab-1]:border-x 
            peer-checked/panel-1:before:[&_#tab-1]:*:border-t 
            peer-checked/panel-1:[&_#tab-2]:*:border-b

            peer-checked/panel-2:[&_#panel-2]:translate-x-0
            peer-checked/panel-2:before:[&_#tab-2]:bg-black/60
            peer-checked/panel-2:before:[&_#tab-2]:inset-0
            peer-checked/panel-2:[&_#tab-2]:text-teal-500
            peer-checked/panel-2:[&_#tab-2]:cursor-auto

            peer-checked/panel-2:before:[&_#tab-2]:border-x 
            peer-checked/panel-2:before:[&_#tab-2]:*:border-t 
            peer-checked/panel-2:[&_#tab-1]:*:border-b
        ">

    <div class="grid grid-cols-2 
                *:cursor-pointer
                *:text-base
                *:py-4
                *:px-6
                *:text-center
                *:text-gray-800
                *:transition-all
                *:duration-300
                *:relative
                *:isolate
                *:border-teal-200/50
                hover:*:text-white
                before:*:border-teal-200/50 
                before:*:absolute
                before:*:bg-black/40
                before:*:-z-10
                before:*:transition-all
                before:*:duration-300
                before:first:*:inset-[0_0_0_100%]
                hover:before:first:*:inset-0

                before:last:*:inset-[0_100%_0_0]
                hover:before:last:*:inset-0
            ">
      <label id="tab-1" for="radio-1">Sign in</label>
      <label id="tab-2" for="radio-2">Sign up</label>
    </div>

    <section class="bg-black/60 overflow-hidden border-x border-b border-teal-200/50 transition-all duration-300 p-8 sm:p-16  grid [grid-template-areas:'stack']
                *:[grid-area:stack]
                *:transition-all
                *:duration-1000
                *:ease-in-out
                *:flex
                *:flex-col
                *:gap-8

                [&_button]:py-5
                [&_button]:px-6
                [&_button]:
                [&_button]:bg-orange-400
                [&_button]:text-white
                [&_button]:text-sm
                [&_button]:relative
                [&_button]:isolate
                [&_button]:w-full
                [&_button]:flex
                [&_button]:items-center
                [&_button]:justify-center
                [&_button]:gap-2
                [&_button]:overflow-hidden
                [&_button]:ring-0
                [&_button]:outline-none
                    
                before:[&_button]:absolute
                before:[&_button]:inset-0
                before:[&_button]:-z-10
                before:[&_button]:opacity-0
                before:[&_button]:transition-all
                before:[&_button]:duration-300
                before:[&_button]:ease-out
                before:[&_button]:bg-teal-500
                
                hover:before:[&_button]:opacity-100
                focus-visible:before:[&_button]:opacity-100

                [&_button>svg]:w-8

                [&_.field]:flex
                [&_.field]:items-center
                [&_.field]:justify-between
                [&_.field]:border-b
                [&_.field]:border-teal-500
                [&_.field]:relative
                [&_.field]:px-2
                [&_.field]:text-gray-200

                [&_.field_span]:transition-all
                [&_.field_span]:duration-300

                [&_.field_label]:absolute
                [&_.field_label]:font-thin
                [&_.field_label]:transition-all
                [&_.field_label]:duration-300
                [&_.field_label]:-translate-y-6
                [&_.field_label]:text-sm
                [&_.field:focus-within_span]:text-teal-500
                [&_.field:focus-within_label]:text-teal-500


                [&_input]:border-none
                [&_input]:
                [&_input]:bg-transparent
                [&_input]:text-sm
                [&_input]:py-3
                [&_input]:
                [&_input]:w-full
                [&_input]:
                [&_input]:transition-all
                [&_input]:duration-300
                [&_input]:outline-none
                [&_input]:ring-0
                Xfocus:[&_input]:bg-white/20


                [&_form]:space-y-5

                [&_.tick_label]:flex
                [&_.tick_label]:items-center
                [&_.tick_label]:gap-2
                [&_.tick_label]:cursor-pointer
                [&_.tick_label:transtion-all
                [&_.tick_label:duration-300
                [&_.tick_label>div]:grid
                [&_.tick_label>div]:[grid-template-areas:'stack'
                hover:[&_.tick_label]:text-teal-500
                [&_.tick_label>div>span]:[grid-area:stack]
                [&_.tick_label>div>span]:text-2xl
                first:[&_.tick_label>div>span]:opacity-50
                last:[&_.tick_abel>div>span]:text-teal-500
                last:[&_.tick_label>div>span]:scale-0
                [&_.tick_label>div>span]:transition-all
                [&_.tick_label>div>span]:duration-300
                [&_.tick_p]:text-xs
                first:[&_.tick_input:checked~label>div>span]:scale-0
                last:[&_.tick_input:checked~label>div>span]:scale-100
                [&_.tick_input:checked~label]:text-teal-500
               
    
                [&_.spacer-or]:mx-auto 
                [&_.spacer-or]:w-2/4
                
                 [&_.spacer-or]:flex
                [&_.spacer-or]:items-center
                [&_.spacer-or]:justify-center
                [&_.spacer-or]:gap-2 
                [&_.spacer-or]:text-sm 
                [&_.spacer-or]:whitespace-nowrap
                before:[&_.spacer-or]:block
                before:[&_.spacer-or]:bg-gradient-to-r
                before:[&_.spacer-or]:to-teal-500
                before:[&_.spacer-or]:w-2/4
                before:[&_.spacer-or]:h-px
                after:[&_.spacer-or]:block
                after:[&_.spacer-or]:bg-gradient-to-l
                after:[&_.spacer-or]:to-teal-500
                after:[&_.spacer-or]:w-2/4
                after:[&_.spacer-or]:h-px
            ">

      <div id="panel-1" class="-translate-x-[500px]">
        <form  action="/singIn" method="POST">
            @csrf
          <div class="field">
            <input value="{{old('username_singin')}}" name= "username_singin" type="text" id="name-1" placeholder="&nbsp;" class="peer" required>
            <label for="name-1" class="peer-placeholder-shown:-translate-y-0 peer-focus:-translate-y-6 ">Username</label>
            <span class="material-symbols-outlined">person</span>
          </div>
          <div class="field">
            <input type="password" id="pass-1" placeholder="&nbsp;" class="peer" required>
            <label for="pass-1" class="peer-placeholder-shown:-translate-y-0 peer-focus:-translate-y-6 ">Password</label>
            <span class="material-symbols-outlined">lock</span>
          </div>
          <div class="mt-4 flex items-center justify-between">
            <div class="tick ">

              <input type="checkbox" id="remember-1" class="peer sr-only">
              <label for="remember-1">
                <div>
                  <span class="material-symbols-outlined ">check_box_outline_blank</span>
                  <span class="material-symbols-outlined ">check_box</span>
                </div>
                <p>Remember Me</p>
              </label>
            </div>
          </div>
          <button type="button" class="uppercase text-lg">Log in</button>
        </form>


      </div>

      <div id="panel-2" class="translate-x-[500px]">
        <form action="/singUp" method="POST" id="registration-form">
            @csrf
          <div class="field">
            <input value="{{old('username_singup')}}" name= "username_singup" type="text" id="name-2" placeholder="&nbsp;" class="peer" required><label for="name-2" class="peer-placeholder-shown:-translate-y-0 peer-focus:-translate-y-6 ">Userame</label>
            <span class="material-symbols-outlined">person</span>
          </div>
          <div class="field">
            <input value="{{old('email_singup')}}" name="email_singup" type="email" id="email-2" placeholder="&nbsp;" class="peer" required><label for="email-2" class="peer-placeholder-shown:-translate-y-0 peer-focus:-translate-y-6 ">Email</label>
            <span class="material-symbols-outlined">email</span>
          </div>
          <div class="field">
            <input type="password" name="password_singup" id="pass-2" placeholder="&nbsp;" class="peer" required>
            <label for="pass-2" class="peer-placeholder-shown:-translate-y-0 peer-focus:-translate-y-6 ">Password</label>
            <span class="material-symbols-outlined">lock</span>
          </div>
          
          <button  type="submit" type="button" class="uppercase text-lg">Sign up</button>
        </form>

      </div>

    </section>
</body>