class jElement {
    jElement(){
        this.handler = {
            get(target,property,reciver){}
        }
    }
    apply(){
        return 42
    }
}


$=function(...args){
    if (args.length==1){
        if (args[0][0]=='#'){
            return new jElement(document.getElementById(args[0].substring(1)))
        }
    }
}