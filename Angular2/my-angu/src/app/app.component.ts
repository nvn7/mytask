import { Component } from '@angular/core';
import { SecondComponent} from './second/second.component';
import { ThirdComponent} from './second/third.component';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css'],
  
})
export class AppComponent {
  directives: [SecondComponent,ThirdComponent]
}
