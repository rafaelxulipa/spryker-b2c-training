import { ChangeDetectionStrategy, Component } from '@spryker/web-components';

@Component({
  selector: 'mp-customer-table',
  templateUrl: './customer-table.component.html',
  styleUrls: ['./customer-table.component.scss'],
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class CustomerTableComponent {
  config = {
    url: '/customer-gateway/customers', // Substitua se tiver outro endpoint
    columns: [
      { title: 'Customer ID', data: 'id' },
      { title: 'Name', data: 'name' },
      { title: 'Email', data: 'email' },
      { title: 'Registration Date', data: 'createdAt' },
    ],
    paging: true,
    ordering: true,
    searching: true,
  };
}
