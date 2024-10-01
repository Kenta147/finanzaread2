import AuthenticatedLayout from "@/Layout/AuthemtificateLayaut";
import { Head } from "@inertiajs/react";
export default function Index({ auth, productos }) {
    return (
        <authenticatedLayout
            user={auth.user}
            header={<h2>Mantrenimiento producto</h2>}
        >
            <Head title="Productos" />
            <div className="py-12" />
            <table className="">
                <thead className="">
                    <tr>
                        <th>Id</th>
                        <th>Nomnbre</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    {usuarios &&
                    usuarios.data &&
                    Array.isArray(usuarios.data) &&
                    usuarios.data.length > 0 ? (
                        usuarios.data.map((usuario) => (
                            <tr key={usuario.id}>
                                <td>{usuario.id}</td>
                                <td>{usuario.name}</td>

                                <td>{usuario.email}</td>
                            </tr>
                        ))
                    ) : (
                        <th>
                            <td colSpan="2">no hya datos disponibles </td>
                        </th>
                    )}
                </tbody>
            </table>
        </authenticatedLayout>
    );
}
