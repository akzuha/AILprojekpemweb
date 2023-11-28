    <header>
        <div class="about">
            
        </div>
    </header>
    <script>
        const toggleBtn = document.querySelector('.togle_btn')
        const toggleBtnIcon = document.querySelector('toggle_btn i')
        const dropDownMenu = document.querySelector('.dropdown_menu')

        toggleBtn.onclick = function(){
            dropDownMenu.classList.toggle.contains('open')

            toggleBtnIcon.classList = isOpen
            ? 'fa-solid faxmark'
            : 'fa-solid fa-bars'
        }   
    </script>