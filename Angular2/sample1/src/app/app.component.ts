import { Component } from '@angular/core';
import { DatabindingComponent } from './databinding/databinding.component'; 
import { TextcomComponent } from './textcom.component';

@Component({
  selector: 'app-name',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  directives:[TextcomComponent];
  nam="Naveen Kumar";
}
