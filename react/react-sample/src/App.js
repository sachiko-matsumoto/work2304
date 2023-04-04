import React, { useEffect } from "react";
import axios from "axios";

const App = () => {
  const url = "http://192.168.33.24:8000/api/test";

  useEffect(()=>{
    (async ()=>{
      try{
        const res = await axios.get(url);
	console.log(res);
        return;
      }catch (e){
        return e;
      }
    })();
  },[]);
  
  return (
    <div className="App"></div>
  );
}

export default App;
