import React, { useContext } from "react";
import Ingatlan from "./Ingatlan";
import { ApiContext } from "../contexts/ApiContext";
import { Table } from "react-bootstrap";
import Urlap from "./Urlap";

function Ingatlanok() {
  const { ingatlanLista } = useContext(ApiContext);

  return (
    <>
      <Table striped bordered hover>
        <thead>
          <tr>
            <th>Kategória</th>
            <th>Leírás</th>
            <th>Hírdetés Dátuma</th>
            <th>Tehermentes</th>
            <th>Ár</th>
          </tr>
        </thead>
        <tbody>
          {ingatlanLista.map((ingatlan) => {
            return <Ingatlan key={ingatlan.id} ingatlan={ingatlan} />;
          })}
        </tbody>
      </Table>
      <Urlap/>
    </>
  );
}

export default Ingatlanok;
