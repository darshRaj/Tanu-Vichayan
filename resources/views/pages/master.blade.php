<!DOCTYPE html>
<html lang="en">
<head>
        @include('layouts.head')
</head>

<body class="hm-gradient">
    @include('pages.header')
    
    @yield('content')
    <!-- Content -->
    
        <button class="open-button" onclick="openForm()">
            <ul>
                <li><img src="{{asset('custom/images/user-chat.png')}}"></li>
                <li style="font-size:13px;margin-left:-15px">Messaging &nbsp; 
                <i class="fa fa-comment clr_white"></i>
                &nbsp;&nbsp; <i class="fa fa-ellipsis-h clr_white"></i></li>
            </ul>
        </button>

        <div class="chat-popup" id="myForm">
            <form action="#" class="form-container">
                <textarea placeholder="Type message.." name="msg" required></textarea>
                <button type="submit" class="btn">Send</button>
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
        </div>


   

    <script>
        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function (event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>

    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>
    <!--Checkbox-->
    <script>
        var options = [];

        $('.dropdown-menu a').on('click', function (event) {

            var $target = $(event.currentTarget),
                val = $target.attr('data-value'),
                $inp = $target.find('input'),
                idx;

            if ((idx = options.indexOf(val)) > -1) {
                options.splice(idx, 1);
                setTimeout(function () { $inp.prop('checked', false) }, 0);
            } else {
                options.push(val);
                setTimeout(function () { $inp.prop('checked', true) }, 0);
            }

            $(event.target).blur();

            console.log(options);
            return false;
        });
    </script>
    <!--Checkbox-->
    <br /><br /><br /><br />

    <!--     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script> -->
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>

</body>
</html>