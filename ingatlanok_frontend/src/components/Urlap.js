import React, { useContext } from "react";
import { ApiContext } from "../contexts/ApiContext";

function Urlap() {
  const { kategoriaLista } = useContext(ApiContext);

  return (
    <div>
      <div class="input-group mb-3">
        <label>Kategória:</label>
        <select>
          {kategoriaLista.map((kategoria) => {
            return <option value={kategoria.id}>{kategoria.nev}</option>;
          })}
        </select>
      </div>

      <div class="input-group mb-3">
        <label>Hírdetés dátuma:</label>
        <input
          type="date"
          class="form-control"
          placeholder="Leírás"
          aria-label="Recipient's username"
          aria-describedby="basic-addon2"
        />
      </div>

      <div class="input-group">
        <span class="input-group-text">Leírás</span>
        <textarea class="form-control" aria-label="With textarea"></textarea>
      </div>

      <div class="input-group mb-3">
        <label>Ár:</label>
        <input
          type="text"
          class="form-control"
          aria-label="Amount (to the nearest dollar)"
        />
      </div>
      <div>
        <button type="submit" class="btn btn-primary mb-3">
          Feltöltés
        </button>
      </div>
    </div>
  );
}

export default Urlap;
