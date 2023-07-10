$('#capture-screenshot').click(function() {
            $("#capture-screenshot").hide();
            const screenshotTarget = document.body;
            html2canvas(screenshotTarget).then(canvas => {
                //document.body.appendChild(canvas);  
                dataURL = canvas.toDataURL();
                let sclink = document.createElement("a");
                sclink.href = dataURL;
                sclink.target = "_blank";
                sclink.innerHTML = "View Screenshot";  
                sclink.click();
                $("#capture-screenshot").show();    
                //document.body.appendChild(sclink);
            });
        });
