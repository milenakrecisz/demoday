document.addEventListener('DOMContentLoaded', function() {
var modal = document.getElementById("myModal");

var btn = document.getElementById("modalBtn");

var close = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

close.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
});

//import './../scss/modal.scss';
/*
import Modal from "react-modal";
import React, { useState } from "react";
import ReactDOM from 'react-dom';

const modalElement = document.getElementById('modalSection');

Modal.setAppElement( modalElement );

export default function App() {
  const [isOpen, setIsOpen] = useState(false);

  function toggleModal() {
    setIsOpen(!isOpen);
  }

  return (
    <div className="App">
      <button onClick={toggleModal}>Sign in</button>

      <Modal
        isOpen={isOpen}
        onRequestClose={toggleModal}
        contentLabel="Sign in"
        className="mymodal"
        overlayClassName="myoverlay"
        closeTimeoutMS={500}
      >
        <div>My modal dialog.</div>
        <button onClick={toggleModal}>Close modal</button>
      </Modal>
    </div>
  );
}

ReactDOM.render(<App />, modalElement );
*/
