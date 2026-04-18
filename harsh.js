
window.onload = ()=>{
    c = document.getElementsByTagName('code')[0]
    class Callable extends Function {
        constructor(inner) {
            super('...args', 'return this._bound._call(...args)')
            
        // Or without the spread/rest operator:
        // super('return this._bound._call.apply(this._bound, arguments)')
        this._bound = this.bind(this)
        this._bound.inner = inner
        return this._bound
        }
        
        _call(ctx,...args) {
          console.log(this.inner)
          parseCode(this.inner)
        }
      }
    
    function get_property(name){
        names= name.split(".")
        if (name.startsWith('ctx')){
            el=ctx
        }else{
        el=window
        }
        for (const n of names) {
            el = el[n] 
        }
        console.log(names,el)
        return el
    }
    function set_property(name,value){
        names= name.split(".")
        el=window
        if (name.startsWith('ctx')){
            el=ctx
        }else{
        el=window
        }
        for (const n of names) {
            if (el[n]!==undefined){
                el = el[n]
            }
        }
        Object.defineProperty(el,names[names.length-1],{
            "value":value
        })
    }
    function parseCode(ele){
        console.log((ele))
        data = []
        for (const el of ele.childNodes) {
            console.log(el)
            if (el.nodeName=='SET'){
                set_property(el.attributes.name.value,parseCode(el))
            }else if (el.nodeName=="LOG"){
                console.log(get_property(el.attributes.what.value))
            }else if (el.nodeName=="#text"){
                data.push(el.textContent)
            }else if (el.nodeName=="FUNCTION"){
                data.push(new Callable(el))
            }
            else{
                v=get_property(el.nodeName.toLowerCase())
                console.log(v)
                if (el.attributes.method.value!==""){
                    m = el.attributes.method.value
                    mr = parseCode(el)
                    console.log(mr,v[m],)
                    if (Array.isArray(mr)){
                        r = v[m](...mr)
                    }else{
                        r = v[m](mr)
                    }
                    console.log(r)
                }else if (el.attributes.property.value!==""){
                    m = el.attributes.property.value
                    r = v[m]
                }else{
                    r = v
                }
                console.log(r)
                data.push(r)
            }
        }
        if (data.length==0){
            return null
        }else if (data.length==1){
            return data[0]
        }else{
            return data
        }
    }
    parseCode(c)
}