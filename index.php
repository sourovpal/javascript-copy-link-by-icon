<style>
    .input_copy_wrapper{
  width: 450px;
  padding: 50px;
  margin : 0 auto;
}
.input_copy {
    padding: 15px 25px;
    background: #eee;
    border: 2px solid #aaa;
    color: #aaa;
    font-size: .8em;
}

.input_copy .icon {
    display: block;
    max-width: 25px;
    cursor: pointer;
    float: right;
}

.input_copy .icon img{
  max-width: 25px;
}
.input_copy .txt {
    width: 80%;
    display: inline-block;
    overflow: hidden;
}


/* click animation */

.flashBG {
    animation-name: flash;
    animation-timing-function: ease-out;
    animation-duration: 1s;
}

@keyframes flash {
    0% {
        background: #28a745;
    }
    100% {
        background: transparent;
    }
}

</style>

<div class="input_copy_wrapper">
    <div class="input_copy">
      <span class="txt">123</span>
      <span class="icon right">
        <img src="http://clipground.com/images/copy-4.png" title="Click to Copy">
      </span>
    </div>
  
  </div>
  <script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script>
  <script>

function copyToClipboard(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    $temp.remove();
}

var addrsField = $('.input_copy .txt');
$('.input_copy .icon').click(function() {
        copyToClipboard('.input_copy .txt');
        addrsField.addClass('flashBG')
          .delay('1000').queue(function(){
            addrsField.removeClass('flashBG').dequeue();
        });
    });


  </script>
