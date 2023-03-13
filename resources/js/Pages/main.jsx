import React from 'react'
import ReactDOM from 'react-dom/client'
import { Provider } from 'react-redux';
import store from './store';
import App from './App'
import { BrowserRouter as Router } from 'react-router-dom';
import 'font-awesome/css/font-awesome.min.css';
import './index.css'



ReactDOM.createRoot(document.getElementById('root')).render(
  <Provider store={store}>
    <Router>
      <App />
    </Router>
  </Provider>
)