// frontend/src/App.js
import React, { useEffect, useState } from 'react';

function App() {
  const [message, setMessage] = useState('');

  useEffect(() => {
    fetch('http://localhost:5847/api') // Make sure this matches your backend endpoint
      .then((res) => res.json())
      .then((data) => setMessage(data.message))
      .catch((error) => console.error('Error fetching data:', error));
  }, []);

  return (
    <div className="App">
      <h1>Blady's Little World</h1>
      <p>{message}</p>
    </div>
  );
}

export default App;