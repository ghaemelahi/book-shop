import { Routes, Route } from "react-router-dom";
import AccountDetails from "@AccountDetails";
import AccountSidebar from "@AccountSidebar";
import BorrowedBook from "@BorrowedBook";
import Dashboard from "@Dashboard";
import DownloadedBook from "@DownloadedBook";
import OrdersBook from "@OrdersBook";
import AccountHeader from "@AccountHeader";

const Account = () => {

  return (
    <>
      <div className="w-full h-screen flex">
        <AccountSidebar />
        <div className="w-10/12 h-full">
          <AccountHeader />
          <div className="p-8">
            <Routes>
              <Route path="/" element={<Dashboard />} />
              <Route path="downloaded" element={<DownloadedBook />} />
              <Route path="borrowed" element={<BorrowedBook />} />
              <Route path="orders" element={<OrdersBook />} />
              <Route path="account-details" element={<AccountDetails />} />
            </Routes>
          </div>
        </div>
      </div>
    </>
  )
}

export default Account