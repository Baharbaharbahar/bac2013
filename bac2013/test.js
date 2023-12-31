function valider(){
    num=document.getElementById("num").value;
    choix=document.getElementById("choix").selectedIndex;
    dc=document.getElementById("dc").value;
    ds=document.getElementById("ds").value;
    if(!numerique(num)){
        alert ("suivie par  2 chiffres non nuls ");
    }
    if((!numerique1(dc))&&(!numerique1(ds))){
        alert (" note du dc et note du ds sont des valurs comprises entre 0 et 20 ")
    }
    if(choix==0){
        alert ("choix svp!!!")
    }

}
function numerique(ch)
{
    for(let i=0;i<ch.length;i++)
    {
        if (ch[i]<"1"||ch[i]>"9")
        {
            return false;
        }
    } return true;

}
function numerique1(ch){
    if(ch.length!=20){
        test=false;
    }else{
        for(let i=0;i<ch.length;i++)
        {
            if (ch[i]<"1"||ch[i]>"9")
            {
                return false;
            }
        } return true;     
    }
}