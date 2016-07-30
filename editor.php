<html>
    <head>
        <title>Rich Editor</title>
        <script type="text/javascript">
        function iBold(){
            rich.document.execCommand('bold',false,null);
        }
        function iItalic(){
            rich.document.execCommand('italic',false,null);
        }
        function iUnderline(){
            rich.document.execCommand('underline',false,null);
        }
        function iFontSize(){
            var size = prompt('Enter a size');
            rich.document.execCommand('FontSize',false,size);
        }
        function iForeColor(){
            var color = prompt('Enter a color');
            rich.document.execCommand('ForeColor',false,color);
        }
        function iHorizontalRule(){
            rich.document.execCommand('inserthorizontalrule',false,null);
        }
        function iUnorderedList(){
            rich.document.execCommand('insertOrderedList',false,'newUL');
        }
        function iUnorderedList(){
            rich.document.execCommand('insertUnorderedList',false,'newOL');
        }
        function iLink(){
            var linkURL = prompt('Enter URL',"http://");
            rich.document.execCommand('CreateLink',false,linkURL);
        }
        function iUnLink(){
            rich.document.execCommand('Unlink',false,null);
        }
        function iImage(){
            var imgSRc = prompt("Enter image location",'');
            if(imgSRc!=null){
                rich.document.execCommand('insertimage',false,imgSRc);
            }
        }
        function submitForm(){
            var myForm = document.getElementById("myForm");
            myForm.elements['body'].value = window.frames['rich'].document.body.innerHTML;
            return false;
            //myForm.submit();
        }
        window.onload = function(){
            rich.document.designMode = 'On';
        }
        </script>
    </head>
    <body>
        <h2>My web application that intakes data from user</h2>
        <form id="myForm" action="parse_action.php" method="post" onsubmit="submitForm()">
            <p>
            Entry Title: <br/>
                <input type="text" size="80" name="title" id="title">
            </p>
            <p>
            Entry Body:<br/> 
            <input type="button" onclick="iBold()" value="B">
            <input type="button" onclick="iItalic()" value="I">
            <input type="button" onclick="iUnderline()" value="U">
            <input type="button" onclick="iFontSize()" value="Text Size">
            <input type="button" onclick="iForeColor()" value="Text Color">
            <input type="button" onclick="iHorizontalRule()" value="HR">
            <input type="button" onclick="iUnorderedList()" value="UL">
            <input type="button" onclick="iUnorderedList()" value="OL">
            <input type="button" onclick="iLink()" value="Link">
            <input type="button" onclick="iUnLink()" value="UnLink">
            <input type="button" onclick="iImage()" value="Image">
            <br>
                <textarea rows="15" cols="80" name="body" id="body" style="display:none;"></textarea>
                <br>
                <iframe id="rich" name="rich" style="border:1px gray soild;width:50%"></iframe>
            </p>
            <p>
                <input type="submit" value="submit">
            </p>
        </form>
    </body>
</html>