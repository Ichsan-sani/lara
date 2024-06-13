<!-- Menghubungkan dengan view template master -->
@extends('master')
 
@section('konten')
 
    <section class="section">
        <h2 class="section-header">Social Media</h2>
          <div class="responsive-table">
            <table>
              <tr class="tr-header">
                <th>&nbsp;</th>
                <th>Account</th>
              </tr>
              <tr>
                <td class="text-left">Facebook</td>
                <td>
                  <a href="facebook.com">-</a>
                </td>
              </tr>
              <tr>
                <td class="text-left">Instagram</td>
                <td>
                  <a href="instagram.com">-</a>
                </td>
              </tr>
              <tr>
                <td class="text-left">Twitter</td>
                <td>
                  <a href="twitter.com">-</a>
                </td>
              </tr>
              <tr>
                <td class="text-left">Linked In</td>
                <td>
                  <a href="linkedin.com.com">-</a>
                </td>
              </tr>
            </table>
          </div>
      </section>
      <hr>
      <!-- Contact -->
      <section class="section">
        <h2 class="section-header">Address</h2>
        <p><b>Home Address </b>: kp.a des.a kec.a rt.0 rw.0</p>
      </section>
 
@endsection