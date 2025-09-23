

function App() {

  return (
    <div className="bg-gray-50">
      <h1 className="text-center py-4 text-3xl font-bold">Select Your Plan</h1>
      <div className="grid grid-cols-1 md:grid-cols-3 text-center gap-8 mx-9">

        <div className="border border-gray-200 rounded-lg p-6 shadow-sm bg-white">
          <h4 className="text-xl font-semibold">Free Trial</h4>
          <p className="mt-2 text-gray-700">Price: $0</p>
          <ul className="mt-4 space-y-2">
            <li>1st feature</li>
            <li>2nd feature</li>
            <li>3rd feature</li>
          </ul>
          <button type="button" className="border rounded-full hover:bg-gray-500 hover:text-white px-6 py-2 my-4">
            Buy
          </button>
        </div>

        <div className="border rounded-lg p-6 shadow-sm bg-blue-50 border-blue-400">
          <h4 className="text-xl font-semibold">Pro</h4>
          <p className="mt-2 text-gray-700">Price: $100 / month</p>
          <ul className="mt-4 space-y-2">
            <li>1st feature</li>
            <li>2nd feature</li>
            <li>3rd feature</li>
          </ul>
          <button type="button" className="border rounded-full hover:bg-gray-500 hover:text-white px-6 py-2 my-4">
            Buy
          </button>
        </div>
        <div className="rounded-lg p-6 shadow-sm bg-white">
          <h4 className="text-xl font-semibold">Enterprise</h4>
          <p className="mt-2 text-gray-700">Price: $1000 / year</p>
          <ul className="mt-4 space-y-2">
            <li>1st feature</li>
            <li>2nd feature</li>
            <li>3rd feature</li>
          </ul>
          <button type="button" className="border rounded-full hover:bg-gray-500 hover:text-white px-6 py-2 my-4">
            Buy
          </button>
        </div>
    
      </div>
    </div>
  );
}

export default App;
