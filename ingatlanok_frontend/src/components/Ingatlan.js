import { useContext } from "react";
import { ApiContext } from "../contexts/ApiContext";


function Ingatlan({ ingatlan }) {
    const {ingatlanTorles} = useContext(ApiContext)
    let tehermentes;
    if (ingatlan.tehermentes===0) {
        tehermentes="Nem"
    }else{tehermentes="Igen"}
  return (
    <>
        <tr>
            <td>{ingatlan.kategoria}</td>
            <td>{ingatlan.leiras}</td>
            <td>{ingatlan.hirdetesDatuma}</td>
            <td>{tehermentes}</td>
            <td>{ingatlan.ar}</td>
            <td><button>Kosárba</button></td>
            <td onClick={()=>ingatlanTorles(ingatlan.id)}>❌</td>
        </tr>
    </>
  );
}

export default Ingatlan;
