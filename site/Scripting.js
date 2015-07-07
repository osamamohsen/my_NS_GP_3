function PrintData(prtContent){
    var WinPrint = window.open('', '', 'left=0,top=0,width=1500,height=2000,toolbar=0,scrollbars=0,status=0');
        WinPrint.document.write(prtContent.innerHTML);
        WinPrint.document.close();
        WinPrint.focus();
        WinPrint.print();
        WinPrint.close();
}