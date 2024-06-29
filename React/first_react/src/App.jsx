import React from 'react';
import { BrowserRouter } from 'react-router-dom';
import Header from './components/Header'
import Navbar from './components/Navbar'
import Home from './components/Home'
import Footer from './components/Footer'
import 'bootstrap/dist/css/bootstrap.min.css';




const App = () => {
    return (
        <div>
        <BrowserRouter>
        <Header/>
        <Navbar/>
        <Home/>
        <Footer/>
        </BrowserRouter>

        </div>
    );
};

export default App;