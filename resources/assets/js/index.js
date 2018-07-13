<<<<<<< HEAD
import React, { Component } from "react";
import { BrowserRouter, Switch, Route } from "react-router-dom";
import ReactDOM from "react-dom";
// import App component
import App from "./components/App";
import TaskEdit from "./components/TaskEdit";

// change the getElementId from example to app
// render App component instead of Example
if (document.getElementById("root")) {
    ReactDOM.render(
        <BrowserRouter>
            <div>
                <Switch>
                    <Route path="/:id/edit" component={TaskEdit} exact={true} />
                    <App />
                </Switch>
            </div>
        </BrowserRouter>,
        document.getElementById("root")
    );
}
=======
import React, { Component } from 'react';
import ReactDOM from 'react-dom';
// import App component
import App from './components/App'

// change the getElementId from example to app 
// render App component instead of Example
if (document.getElementById('root')) {
    ReactDOM.render(<App />, document.getElementById('root'));
}
>>>>>>> c2eb8c81ae584adcc99f3c29b36420b5e0d7b42c
